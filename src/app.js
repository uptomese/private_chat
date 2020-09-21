var bodyParser = require("body-parser");
let express = require("express");
let app = express();
let server = require("http").Server(app);
let io = require("socket.io")(server);
let stream = require("./ws/stream");
let path = require("path");
let favicon = require("serve-favicon");

app.use(favicon(path.join(__dirname, "pngguru.com.ico")));
app.use("/assets", express.static(path.join(__dirname, "assets")));

app.use(express.static(__dirname + "/"));
app.use(bodyParser.urlencoded({
    extended: false
}));
app.engine("html", require("ejs").renderFile);

// app.set("views", path.join(__dirname, "views"));
// app.set("view engine", "html");
// app.set("views", __dirname);

app.engine("html", require("ejs").renderFile);
app.set("view engine", "html");
app.set("views", __dirname);


// app.get("/:session/:name", (req, res) => {
//     // res.sendFile(__dirname + "/index.html");
//     var session = req.params.session;
//     var user = req.params.name;
//     // console.log('session: ' + session + '/user: ' + user);
//     res.render("index", {
//         session: session,
//         user: user
//     });
// });

app.get("/video/:session", (req, res) => {
    var session = req.params.session;
    res.render("video", {
        session: session,
    });
})

io.of("/stream").on("connection", stream);

var port = process.env.PORT || 6999;

const users = {};

io.on("connection", socket => {
    // connected io success
    // console.log("a user connected ", socket.id);

    // -------------------------------------------------Chat
    socket.on("chatMessage", data => {
        console.log(
            "Event: chatMessage",
            "/User: " + data[0]["name"],
            "/Session: " + data[1]["session"],
            "/msg: " + data[1]["message"]
        );
        // trick function client
        io.emit("chatMessage", {
            //app.js line 86
            user: data[0],
            message: data[1],
            session: data[2],
            unread: data[3]
        });
    });

    // -------------------------------------------------userOnline
    socket.on("login", data => {
        if (data.userId) {
            console.log("a user " + data.userId + " connected");
            io.emit("userOnline", {
                userId: data.userId
            });
            users[socket.id] = data.userId;
        }
    });
    socket.on("disconnect", () => {
        if (users[socket.id]) {
            console.log("user " + users[socket.id] + " disconnected");
            io.emit("userOffline", {
                userId: users[socket.id]
            });
            delete users[socket.id];
        }
    });

    // -------------------------------------------------toChat
    socket.on("toChat", data => {
        io.emit("toChat", {
            session: data[0],
            user_id: data[1]
        });
    });

    // -------------------------------------------------roomVideo
    socket.on("roomVideo", data => {
        console.log('roomVideo: ', data);
        io.emit("roomVideo", {
            data: data
        });
    });

    // -------------------------------------------------roomLink
    socket.on("nameRoom", data => {
        console.log('Room created: ', data);
        io.emit("nameRoom", {
            data: data
        });
    });

    // -------------------------------------------------roomAnswer
    socket.on("roomAnswer", data => {
        console.log('roomAnswer: ', data);
        io.emit("roomAnswer", {
            data: data
        });
    });

    // -------------------------------------------------cancelCall
    socket.on("cancelCall", data => {
        console.log('cancelCall: ', data);
        io.emit("cancelCall", {
            data: data
        });
    });

    // -------------------------------------------------cancelCall
    socket.on("closeBrowser", data => {
        console.log('closeBrowser: ', data);
        io.emit("closeBrowser", {
            data: data
        });
    });

});

server.listen(port, () => {
    console.log("Run Port // :", port);
});
