<div class="modal fade" id="addUser"  tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            @csrf
            <div class="modal-body">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add User </h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="">
                                    <div class="form-group">
                                        <h5> Name</h5>
                                        <input type="text" name="event" v-model="user.name"
                                            class="form-control input-rounded" placeholder="Enter name">
                                    </div>

                                    <div class="form-group">
                                        <h5>Email</h5>
                                        <input type="email" name="event" v-model="user.email"
                                            class="form-control input-rounded" placeholder="Enter name">
                                    </div>

                                    <div class="form-group">
                                        <h5>User Role </h5>
                                        <select class="form-control form-control-sm" v-model="user.user_type">
                                            <option>Choose Role</option>
                                            <option value="admin">Admin</option>
                                            <option value="support">Support</option>
                                            <option value="regular">Member</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <h5>Nationality</h5>
                                        <select class="form-control form-control-sm" v-model="user.nationality">
                                            <option>Choose Nationality</option>
                                            <option value="ghana">Ghana</option>
                                            <option value="kenya">Kenya</option>
                                            <option value="nigeria">Nigeria</option>
                                            <option value="rwanda">Rwanda</option>
                                            <option value="uganda">Uganda</option>
                                            <option value="south-africa">South-Africa</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h5>Password</h5>
                                        <input type="password" name="password" v-model="user.password"
                                            class="form-control input-rounded" placeholder="Enter Password">
                                    </div>

                                    <div class="form-group">
                                        <h5>Confirm Password</h5>
                                        <input type="password" name="confirm_pass" v-model="user.confirm_password"
                                            class="form-control input-rounded" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-rounded btn-secondary btn-sm light"
                    data-dismiss="modal">Skip</button>
                <button type="button" @click="createUser()" class="btn btn-rounded btn-info btn-sm">Proceed</button>
                <div v-if="isLoading" class="spinner-border text-success" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="editUser"  tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            @csrf
            <div class="modal-body">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add User </h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="">
                                    <div class="form-group">
                                        <h5> Name</h5>
                                        <input type="text" name="event" v-model="userEdit.name"
                                            class="form-control input-rounded" placeholder="Enter name">
                                    </div>

                                    <div class="form-group">
                                        <h5>Email</h5>
                                        <input type="email" name="event" v-model="userEdit.email"
                                            class="form-control input-rounded" placeholder="Enter name">
                                    </div>

                                    <div class="form-group">
                                        <h5>User Role </h5>
                                        <select class="form-control form-control-sm" v-model="userEdit.user_type">
                                            <option>Choose Role</option>
                                            <option value="admin">Admin</option>
                                            <option value="support">Support</option>
                                            <option value="regular">Member</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <h5>Nationality</h5>
                                        <select class="form-control form-control-sm" v-model="userEdit.nationality">
                                            <option>Choose Nationality</option>
                                            <option value="ghana">Ghana</option>
                                            <option value="kenya">Kenya</option>
                                            <option value="nigeria">Nigeria</option>
                                            <option value="rwanda">Rwanda</option>
                                            <option value="uganda">Uganda</option>
                                            <option value="south-africa">South-Africa</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h5>Password</h5>
                                        <input type="password" name="password" v-model="userEdit.password"
                                            class="form-control input-rounded" placeholder="Enter Password">
                                    </div>

                                    <div class="form-group">
                                        <h5>Confirm Password</h5>
                                        <input type="password" name="confirm_pass" v-model="userEdit.confirm_password"
                                            class="form-control input-rounded" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-rounded btn-secondary btn-sm light"
                    data-dismiss="modal">Skip</button>
                <button type="button" @click=" updateUser()" class="btn btn-rounded btn-info btn-sm">Proceed</button>
                <div v-if="isLoading" class="spinner-border text-success" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>

        </div>
    </div>
</div>


{{-- Edit --}}






