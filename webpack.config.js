const path = require('path');
const webpack = require('webpack');

module.exports = {
    resolve: {
        modules: [
            path.resolve('./node_modules')
        ]
    },

    entry: {
        script: path.join(__dirname, 'assets/src/script.js')
    },

    output: {
        filename: '[name].js',
        path: path.resolve(__dirname, './assets/js/')
    }
};
