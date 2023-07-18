const path = require('path');

module.exports = {
    entry: {
        'testimonial': './blocks/testimonial/index.jsx',
        'tastes': './blocks/tastes/index.jsx',
    },
    output: {
        path: path.resolve(__dirname, 'blocks/dist'),
        filename: '[name].js'
    },
    module: {
        rules: [
            {
                test: /.jsx?$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader'
                }
            }
        ]
    }
}