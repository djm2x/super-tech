const copyfiles = require('copyfiles');

const opt = { all: false, soft: false, up: 1, verbose: true };

copyfiles(['dist/*.js', 'public'], opt, e => console.error(e));
copyfiles(['dist/*.html', 'resources/views'], opt, e => console.error(e));
