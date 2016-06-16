#!/usr/bin/env  node

var fontAwesome = require("node-font-awesome"),
    fs = require("fs"),
    mkdirp = require("mkdirp"),
    nodeNeat = require("node-neat"),
    ncp = require("ncp").ncp,
    path = require("path"),
    rimraf = require("rimraf"),
    sass = require("node-sass");

var config = {
  output: "/build",

  fonts: {
    input: fontAwesome.fonts.replace(/\*$/, ""),
    output: "/fonts"
  },

  sass: {
    input: "/styles/main.scss",
    output: "/css/main.css"
  }
};

function join() {
  var args = [].splice.call(arguments, 0);
  return path.join.apply(this, [__dirname, "../"].concat(args));
}

function safeDir(relative) {
  var dir = path.dirname(relative);
  mkdirp.sync(dir);
  return relative;
}

/* CLEAN OLD BUILD */
rimraf.sync(join(config.output));

/* FONTS */
ncp(config.fonts.input, safeDir(join(config.output, config.fonts.output)), function (err) {
 if (err) {
   return console.error(err);
 }
});

/* SASS */
sass.render({
  file: join(config.sass.input),
  includePaths: nodeNeat.with("node_modules", fontAwesome.scssPath)
}, function (err, result) {
  if (err) {
    return console.error(err);
  }

  console.log("SASS compiled in", result.stats.duration, "ms");

  fs.writeFile(safeDir(join(config.output, config.sass.output)), result.css, function(err) {
    if (err) {
      return console.error("Error writing file:", err);
    }
  });
});
