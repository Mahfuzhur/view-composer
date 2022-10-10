<select name="{{$fields ?? channel_id}}" id="{{$fields ?? channel_id}}">
            @foreach($channels as $channel)
                <option value="{{$channel->id}}">{{$channel->name}}</option>
            @endforeach
        </select>