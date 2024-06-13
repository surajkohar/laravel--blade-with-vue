<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .modal-right {
            position: fixed;
            top: 0;
            right: 0;
            width: 400px;
            height: 100%;
            background-color: white;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.5);
            z-index: 1050;
            overflow-y: auto;
            transition: transform 0.3s ease-out;
            transform: translateX(100%);
        }

        .modal-right.show {
            transform: translateX(0);
        }

        .modal-header,
        .modal-footer {
            padding: 15px;
        }

        .modal-body {
            padding: 20px;
        }

        .modal-title {
            margin: 0;
        }

        .close {
            font-size: 1.5rem;
            line-height: 1;
            background: transparent;
            border: 0;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Your Website</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <button type="button" id="btnpayment" class="nav-link" @click="openModal">Payment</button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Signup</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="app" class="flex items-center justify-center min-h-screen bg-gray-100">
            <form method="post" :action='url'
                class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-md">
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="gdg">
                        fsfs
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 
                text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="Enter your username">


                    <label class="block text-gray-700 font-bold mb-2" :class="usernameClass" for="username">
                        Username
                    </label>

                    <input v-model="username"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="Enter your username">
                    <span>@{{ username }}</span>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="email">
                        Email
                    </label>
                    <input v-model="email"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" type="email" placeholder="Enter your email">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="password">
                        Password
                    </label>
                    <input v-model="password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" placeholder="Enter your password">
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Sign In
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                        href="#">
                        Forgot Password?
                    </a>
                </div>
            </form>
        </div>

        <!-- Right Modal -->
        <div :class="['modal-right', { 'show': showModal }]">
            <div class="modal-header">
                <h5 class="modal-title">Record Payment</h5>
                <button type="button" class="close" @click="closeModal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="amountReceived">Amount Received</label>
                        <input type="text" class="form-control" id="amountReceived"
                            placeholder="Enter amount received">
                    </div>
                    <div class="form-group">
                        <label for="paymentDate">Payment Date</label>
                        <input type="date" class="form-control" id="paymentDate">
                    </div>
                    <div class="form-group">
                        <label for="paymentMode">Payment Mode</label>
                        <select class="form-control" id="paymentMode">
                            <option>Cash</option>
                            <option>Card</option>
                            <option>Bank Transfer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="adminNote">Admin Note</label>
                        <textarea class="form-control" id="adminNote" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" @click="closeModal">Close</button>
                <button type="button" class="btn btn-primary" @click="savePayment">Save changes</button>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
        <script src="js/test.js"></script>
    </div>
</body>

</html>
