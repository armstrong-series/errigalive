<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            @csrf
            <div class="modal-body">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Event</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="">
                                    <div class="form-group">
                                        <h5>Event Name</h5>
                                        <input type="text" name="event" v-model="event.name"
                                            class="form-control input-rounded" placeholder="Enter event name">
                                    </div>
                                    <div class="form-group">
                                        <h5>Event Description</h5>
                                        <textarea class="form-control" rows="4" id="comment" v-model="event.description"
                                            placeholder="Enter Event Description"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <h5>Venue</h5>
                                        <textarea class="form-control" v-model="event.venue" rows="4" id="comment" placeholder="Enter Venue of Event"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <h5>Date</h5>
                                        <input type="date" name="date" class="form-control" v-model="event.date">

                                    </div>
                                    <div class="form-group">
                                        <h5>Price</h5>
                                        <input type="number" name="date" class="form-control"
                                            placeholder="Enter price in Naira" v-model="event.price">
                                    </div>
                                    <div class="form-group">
                                        <h5>Event Type</h5>
                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">

                                                <select class="mr-sm-2" id="inlineFormCustomSelect"
                                                    v-model="event.event_type">
                                                    <option selected>Choose...</option>
                                                    <option value="lostboy">Lost Boy</option>
                                                    <option value="genesis">Genesis</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Category</h5>
                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">

                                                <select class="mr-sm-2" id="inlineFormCustomSelect"
                                                    v-model="event.category">
                                                    <option selected>Select Category</option>
                                                    <option value="regular">Regular</option>
                                                    <option value="vip">Vip</option>
                                                    <option value="gold">Gold</option>
                                                    <option value="platinium">Platinium</option>
                                                    <option value="early_bird">Early Bird</option>
                                                    <option value="gate">Gate</option>
                                                    <option value="front_row">Front Row</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Event Banner</h5>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file" v-if="imageFile == null || imageFile.length == 0"
                                                class="fileUpload px-5 py-2 mt-5 btn-md btn-primary">
                                                <input type="file" name="event_banner" class="custom-file-input"
                                                    @change="showImagePreview($event)" accept="image/*"
                                                    class="form-control upload">
                                                <label class="custom-file-label">Choose file</label>&nbsp;&nbsp;<i
                                                    v-if="!imageFile"></i>
                                            </div>
                                        </div>

                                        <div class="np-image-preview text-center"
                                            v-if="imageFile != null && imageFile.length != 0">
                                            <img class="np-preview" :src="imageFile" />
                                        </div>
                                        <div v-if="imageFile != null && imageFile.length != 0 && !isImageUploading">
                                            <button class="btn-sm btn-default" v-on:click="clearImage()" title="Remove">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
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
                <button type="button" @click="createEvent()" class="btn btn-rounded btn-info btn-sm">Proceed</button>

                <div v-if="isLoading" class="spinner-border text-success" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>

        </div>
    </div>
</div>



{{-- Edit --}}


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            @csrf
            <div class="modal-body">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Event</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="">
                                    <div class="form-group">
                                        <h5>Event Name</h5>
                                        <input type="text" name="event" v-model="eventEdit.name"
                                            class="form-control input-rounded" placeholder="Enter event name">
                                    </div>
                                    <div class="form-group">
                                        <h5>Event Description</h5>
                                        <textarea class="form-control" rows="4" id="comment" v-model="eventEdit.description"
                                            placeholder="Enter Event Description"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <h5>Venue</h5>
                                        <textarea class="form-control" v-model="eventEdit.venue" rows="4" id="comment"
                                            placeholder="Enter Venue of Event"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <h5>Date</h5>
                                        <input type="date" name="date" class="form-control"
                                            v-model="eventEdit.date">

                                    </div>
                                    <div class="form-group">
                                        <h5>Price</h5>
                                        <input type="number" name="date" class="form-control"
                                            placeholder="Enter price in Naira" v-model="eventEdit.price">
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
                <button type="button" @click="updateEvent()" class="btn btn-rounded btn-info btn-sm">Save
                    Changes</button>

                <div v-if="isLoading" class="spinner-border text-success" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- End Edit --}}


{{-- Change Event Thumbnail --}}

<div class="modal fade" id="changeThumbnail" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            @csrf
            <div class="modal-body">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Change Thumbnail</h4>
                        </div>


                        <div class="form-group">
                            <div class="input-group mb-3">

                                <div class="custom-file" v-if="imageFile == null || imageFile.length == 0"
                                    class="fileUpload px-5 py-2 mt-5 btn-md btn-primary">
                                    <input type="file" name="event_banner" class="custom-file-input"
                                        @change="showImagePreview($event)" accept="image/*"
                                        class="form-control upload">
                                    <label class="custom-file-label">Choose file</label>&nbsp;&nbsp;<i
                                        v-if="!imageFile"></i>
                                </div>

                            </div>

                            <div class="np-image-preview text-center" v-if="imageFile != null && imageFile.length != 0">
                                <img class="np-preview" :src="imageFile" style="width: 300px; height:400px;">
                            </div>

                             <div v-if="imageFile != null && imageFile.length != 0 && !isImageUploading">
                                <button class="btn-sm btn-default" v-on:click="clearImage()">
                                  <i class="fas fa-trash"></i>
                              </button>

                        </div>

                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-rounded btn-secondary btn-sm light"
                    data-dismiss="modal">Skip</button>
                <button type="button" @click="changeThumbnail()" class="btn btn-rounded btn-info btn-sm">Save Changes</button>

                <div v-if="isLoading" class="spinner-border text-success" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>

        </div>
    </div>
</div>
{{-- End Thumbnail Change --}}
