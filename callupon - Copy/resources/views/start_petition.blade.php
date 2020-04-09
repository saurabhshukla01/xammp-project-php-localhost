@extends('layout.common')
@section('main')
    <section id="about" class="pt-5">
      <div class="container">
        <div class="row">
          <form action="/petition/start-petition" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <div class="row pl-4 pr-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Topic<span class="text-danger">*</span></label>
                                    <select id="category_id" name="category_id" class="form-control" required>
                                                                                        <option value="1" >Animal</option>
                                                                                        <option value="2" >Human rights</option>
                                                                                        <option value="3" >Health</option>
                                                                                        <option value="4" >Economic Justice</option>
                                                                                        <option value="5" >Politics</option>
                                                                                        <option value="6" >Local</option>
                                                                                        <option value="7" >Eniveronment</option>
                                                                                        <option value="8" >Women's rights</option>
                                                                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control " name="petition_title" value="" id="petition_title" required placeholder="Title" tabindex="2"  maxlength="255">
                                </div>
                            </div>
							<div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Target<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control " name="petition_target" value="" id="petition_target" required placeholder="Target" tabindex="3"  maxlength="255">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Logo<span class="text-danger">*</span></label>
                                    <input type="file" class="form-control" name="petition_image" id="petition_image" tabindex="4" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                	<label for="exampleInputEmail1">Url<span class="text-danger"></span></label>
                                    <input type="text" class="form-control " name="petition_url" value="" id="petition_url" placeholder="Url" tabindex="5"  maxlength="255">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Goal<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control " name="petition_goal" value="" id="petition_goal" placeholder="Goal" tabindex="5"  maxlength="10">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description<span class="text-danger">*</span></label>
                                    <textarea class="form-control" rows="3" id="petition_description" name="petition_description" tabindex="6" placeholder="Description"></textarea>
                                </div>
                            </div>
                    </div>
                    <div class="box-footer pl-4 pr-4">
                        <button type="submit" class="btn btn-primary  mb-0 aqua m-t-xs bottom15-xs btn-round btnSubmit" value="form_submit" name="save" id="save">Submit</button>
                    </div>
                    </form>
    </section>
@endsection
