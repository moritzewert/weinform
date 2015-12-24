@if(Alert::any())
    <style>
        #infos-box .list-group-item:first-child{
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
        }
    </style>
    <div class="container" style="padding-left: 30px; padding-right: 30px; margin-top: -20px;">
        <div class="panel panel-default" style="border-top: none; border-top-left-radius: 0px; border-top-right-radius: 0px;">
            <div id="infos-box" class="list-group">
                @foreach (Alert::getMessages() as $type => $messages)
                    @foreach ($messages as $message)
                        <div class="list-group-item list-group-item-{{ $type }}">{{ $message }}</div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endif