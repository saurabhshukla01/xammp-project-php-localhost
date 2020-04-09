@extends('layout.common')
@section('main')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
                    <h1 class="text-center mb-4 mt-2">Edit profile</h1>
                    <div class="flex-embed-content text-center mb-4" style="width:200px;height:200px; margin-left:35%;">
                        <img class="image-cropper-nodrag position-absolute-center border-rounded-circle" alt="" src="https://static.change.org/profile-img/default-user-profile.svg">
                    </div>
                    <p class="text-center mb-4"><u><a href="#">Upload Photo</a></u></p>
                    <div class="alert alert-danger">
                        <a class="close font-weight-light" data-dismiss="alert" href="#">×</a>Password is too short.
                    </div>
                    <form>
                        <div class="form-group has-error">
                            <label for="first_name">First name</label>
                            <input class="form-control input-lg" placeholder="First Name" name="fn" type="text">
                        </div>
                        <div class="form-group has-error">
                            <label for="Last_name">Last name</label>
                            <input class="form-control input-lg" placeholder="Last Name" name="ln" type="text">
                        </div>
                        <div class="form-group has-error">
                            <label for="about-me">About me</label>
                            <textarea name="description" class="form-control input-lg" id="" maxlength="255" placeholder="Write a short description about yourself" rows="8"></textarea>
                        </div>
                        <div class="form-group has-error">
                            <label for="Last_name">City</label>
                            <input class="form-control input-lg" placeholder="city" name="city" type="text">
                        </div>
                        <div class="form-group">
                            <select class="form-control col-md-6">
                                <option selecterd="">India</option>
                                <option>Indonasia</option>
                                <option>Iceland</option>
                                <option>Guyana</option>
                                <option>Japan</option>
                                <option>Jaymica</option>
                                <option>South India</option>
                            </select>
                        </div>
                        <div class="form-group has-error">
                            <label for="Twitter">Twitter</label>
                            <input class="form-control input-lg" placeholder="@ username" name="twt" type="text">
                        </div>
                        <div class="form-group has-error">
                            <label for="Profile_shortcut">Profile shortcut</label>
                            <input class="form-control input-lg" placeholder="Create shortcut link to your profile" name="twt" type="text">
                        </div>
                        <div class="form-group has-error">
                            <label><strong>Private info</strong>(only you and Change.org staff can see this)</label>
                        </div>
                        <div class="form-group has-error">
                            <label for="Street_address">Street address</label>
                            <input class="form-control input-lg" placeholder="Street address" name="sa" type="text">
                        </div>
                        <div class="row">
                            <div class="form-group has-error col-md-6">
                                <label for="Last_name">Postal code</label>
                                <input class="form-control input-lg" placeholder="Postal code" name="pc" type="text">
                            </div>
                            <div class="form-group has-error col-md-6">
                                <label for="Last_name">Language</label>
                                <select class="form-control input-lg">
                                    <option selecterd="">English(india)</option>
                                    <option>Hindi</option>
                                    <option>Talgu</option>
                                    <option>Arbi</option>
                                    <option>Indonasion</option>
                                    <option>Turki</option>
                                    <option>Guyana</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group has-error">
                            <label for="Profile_shortcut"><p>Phone number (optional)</p>
                                <p>If you're interested, please provide a number for us to reach you regarding campaigns, causes, membership programmes, or other Change.org-related efforts.</p></label>
                            <input class="form-control col-md-6" placeholder="Phone number" name="pn" type="text">
                        </div>
                        <div class="checkbox">
                            <label class="small">
                                <input name="terms" type="checkbox">I have read and agree to the <a href="#">terms of service</a>
                            </label>
                        </div>
                        <div class="form-group has-error">
                            <input class="btn btn-danger col-md-2" value="Save" type="submit">
                            <!--<input class="btn btn-primary col-md-2" value="Cancel" type="submit">-->
                            <input class="btn btn-defult col-md-2" value="Cancel" type="submit">
                            <!--<a class="m-4" href="#"><u>Cancel</u></a>-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
