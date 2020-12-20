<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap/dist/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css" />

    <title>PHP OOP VUEJS CRUD</title>

    <style>
        [v-cloak] {
            display: none;
        }
    </style>

</head>

<body class="bg-light">
    <div class="container" id="app" v-cloak>

        <div class="row">
            <div class="col-md-8 mx-auto my-5">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="d-flex d-flex justify-content-between">
                            <div class="lead">PHP PDO VUEJS CRUD</div>
                            <button id="show-btn" @click="showModal('my-modal')" class="btn btn-sm btn-outline-warning">Add Records</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Add Records Modal -->
                        <b-modal ref="my-modal" hide-footer title="Add Records">
                            <form action="" @submit.prevent="onSubmit">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" v-model="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" v-model="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-sm btn-outline-info">Add Records</button>
                                </div>
                            </form>
                            <b-button class="mt-3" variant="outline-danger" block @click="hideModal('my-modal')">Close Me
                            </b-button>
                        </b-modal>
                        <!-- //Add Records Modal -->

                        <!-- table -->
                        <div class="text-muted lead text-center" v-if="!records.length">No record found</div>
                        <div class="table-responsive" v-if="records.length">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(record, i) in records" :key="record.id">
                                        <td>{{i + 1}}</td>
                                        <td>{{record.name}}</td>
                                        <td>{{record.email}}</td>
                                        <td>
                                            <a href="#" @click.prevent="deleteRecord(record.id)" class="text-danger mr-1">Delete</a>
                                            <a href="#" @click.prevent="editRecord(record.id)" class="text-info">Edit</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- //table -->
                        </div>
                    </div>
                </div>

                <!-- Update Record Modal -->
                <!-- //Update Record Modal -->
                <div>
                    <b-modal ref="my-modal1" hide-footer title="Update Record">
                        <div>
                            <form action="" @submit.prevent="onUpdate">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" v-model="edit_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" v-model="edit_email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-sm btn-outline-info">Update Record</button>
                                </div>
                            </form>
                        </div>
                        <b-button class="mt-3" variant="outline-danger" block @click="hideModal('my-modal1')">Close Me
                        </b-button>
                    </b-modal>
                </div>
            </div>
        </div>

    </div>

    <!-- Script -->
    <script src="js/vue.js"></script>
    <script src="js/bootstrap-vue.min.js"></script>
    <script src="js/axios.min.js"></script>
    <script src="js/app.js"></script>

</body>

</html>