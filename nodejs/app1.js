const http = require("http");


const hostname = "127.0.0.1";
const port = 3000;

const server = http.createServer((req, res) => {
  res.statusCode = 200;
  res.setHeader("Content-Type", "text/plain");
  res.end("Hello World\n");
});

server.listen(port, hostname, () => {
  console.log("Server running at http");
});

//fs means filesystem
var fs = require("fs");

//my custom POC data
var data = "Ayyo";

//write my custom data to the file
fs.writeFile("temp1.txt", data, (err) => {
  if (err) console.log(err);
  console.log("Successfully Written to File.");
});


//read my custom data from the file
fs.readFile("temp1.txt", function(err, buf) {
  console.log(buf.toString());
});
