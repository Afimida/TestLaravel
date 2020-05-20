<h2 class="text-center">{{$blockName}}</h2>
<div class="card">
    <div class="card-body">
        @if (isset($commentsList))
            @foreach($commentsList as $item)
                <div class="row mt-2" id="card-{{ $item['id'] }}">
                    <div class="col-md-2">
                        <img src="/media/{{ $item['file'] }}" class="img img-rounded img-fluid"/>
                        <p class="text-secondary text-center">15 Minutes Ago</p>
                    </div>
                    <div class="col-md-10">
                        <p>
                            <a class="float-left"
                               href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>{{ $item['name'] }}</strong></a>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        </p>
                        <div class="clearfix"></div>
                        <p>{{ $item['message'] }}</p>
                        <p>
                            <button class="btn btn-info postbutton" data-action="approve" id="{{ $item['id'] }}">Approve
                            </button>
                            <button class="btn btn-danger postbutton" data-action="delete" id="{{ $item['id'] }}">Delete
                            </button>
                        </p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
