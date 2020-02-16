const app = require("express")();
const port = 3000;
const path = require("path");

app.get("/", (req, res) => {
  res.sendFile(path.join(__dirname + "/index.html"));
});

app.listen(port, () => {
  console.log("listening on port 3000");
});
