var express = require('express');
const port = 8081;
const path = require('path')

const app = express();

app.listen(port, () => {
    console.log("Servidor rodando na porta: " + port);
});

// Public
app.use(express.static(path.join(__dirname, "public")));

app.get('/', (req, res) => {
    res.sendFile(__dirname + "/public");
});