#!/usr/bin/env  node

var rimraf = require("rimraf");

var config = {
  output: '/build',
};

function join() {
  var args = [].splice.call(arguments, 0);
  return path.join.apply(this, [__dirname, "../"].concat(args));
}

/* CLEAN OLD BUILD */
rimraf.sync(join(config.output));
