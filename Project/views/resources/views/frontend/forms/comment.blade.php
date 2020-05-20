<h2 class="text-center">{{$blockName}}</h2>
<div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6 pb-5">
        <!--Form with header-->
        <form action="{{ url('/comment-add') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card border-primary rounded-0">
                <div class="card-header p-0">
                    <div class="bg-info text-white text-center py-2">
                        <h3><i class="fa fa-envelope"></i> Send you opinion</h3>
                        <p class="m-0">Write message</p>
                    </div>
                </div>
                <div class="card-body p-3">
                    <!--Body-->
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                            </div>
                            <input type="text" class="form-control" id="name" name="name"
                                   placeholder="Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                            </div>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="ejemplo@gmail.com" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                            </div>
                            <textarea class="form-control" name="message" placeholder="Message"
                                      required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-file text-info"></i></div>
                            </div>
                            <input type="file" class="form-control-file" name="file" id="file" placeholder="file"/>
                        </div>
                    </div>

                    <div class="text-center">
                        <input type="submit" value="Submit" class="btn btn-info btn-block rounded-0 py-2">
                    </div>
                </div>

            </div>
        </form>
        <!--Form with header-->
    </div>
</div>
