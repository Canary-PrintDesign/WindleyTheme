#!/usr/bin/env  node

var fontAwesome = require("node-font-awesome"),
    fs = require("fs"),
    mkdirp = require("mkdirp"),
    ncp = require("ncp").ncp,
    path = require("path"),
    rimraf = require("rimraf");

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
