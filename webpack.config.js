const path = require("path");

module.exports = (env, options) => {
    let isDev = options.mode === 'development';

    const mainModule = {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: ["babel-loader"]
            },
            {
                test: /\.(s*)css$/,
                use: [
                    "style-loader",
                    {
                        loader: "css-loader",
                        options: {
                            sourceMap: isDev,
                        },
                    },
                    {
                        loader: "sass-loader",
                        options: {
                            sourceMap: isDev,
                        },
                    },
                ],
            },
            {
                test: /\.(png|svg|jpg|jpeg|gif)$/i,
                type: 'asset/resource',
            },
        ]
    };

    const PATHS = {
        dist: path.join(__dirname, '/public/dist'),
        admin: {
            srcJS:  path.join(__dirname, '/app/modules/admin/assets/js'),
        },
        common: {
            srcJS:  path.join(__dirname, '/app/assets/js'),
        }
    }

    return [
        //admin
        {
            devtool: isDev ? 'eval-source-map' : false,
            entry: [
                PATHS.admin.srcJS + '/common.js',
            ],
            output: {
                path: PATHS.dist,
                filename: "admin.js",
            },
            module: mainModule,
        },
        // common
        {
            devtool: isDev ? 'eval-source-map' : false,
            entry: [
                PATHS.common.srcJS + '/common.js',
            ],
            output: {
                path: PATHS.dist,
                filename: "main.js",
            },
            module: mainModule,
        },
    ]
};
