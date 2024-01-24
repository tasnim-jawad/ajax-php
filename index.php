<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ajax EDIT demo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="display-1 text-center mt-5 bg-info">AJAX CRUD</h1>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="inputField border p-3 border-info shadow"> 
                        <div class="heading text-center ">Account</div>
                        <input type="number" class="form-control d-none" id="idToEdit" name="idToEdit" > 
                        <div class="form-group mb-3">
                            <label for="name">name</label>
                            <input type="text" class="form-control" id="name" name="name" > 
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">email</label>
                            <input type="email" class="form-control" id="email" name="email" > 
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">password</label>
                            <input type="password" class="form-control" id="password" name="password" > 
                        </div>
                        <button id="addAccount" class=" btn btn-info w-100"><span id="buttonName">Add account</span></button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                <th scope="col">password</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <button class="editAccount btn btn-warning btn-sm">edit</button>
                                    <button class="deleteAccount btn btn-danger btn-sm">delete</button>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="ajax.js"></script>
  </body>
</html> 