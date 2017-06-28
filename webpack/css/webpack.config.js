module.exports = {
    entry: './main.js',
    output: {
        filename: 'bundle.js'
    },
    module: {
        loaders:[
            {test: /\.less$/, loader: 'style-loader!css-loader!less-loader'},
        ]
    }
};