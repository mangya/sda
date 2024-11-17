@foreach($tagList as $key => $tagDetails)
    <tr>
        <td><input type="checkbox" name="checkedIds[]" value="{{$tagDetails->id}}" class="checkedIds"/></td>
        <td>{{$key + 1}}</td>
        <td>{{$tagDetails->id}}</td>
        <td>{{$tagDetails->treeName}}</td>
        <td>{{date('d-m-Y', strtotime($tagDetails->date_of_plantation))}}</td>
        <td>{{ $tagDetails->tree_status == 1 ? 'Alive' : 'Dead' }}</td>
        <td><a href="{{ route('show.app.printQRCode', $tagDetails->id) }}"> Generate QR Code</a></td>
    </tr>
@endforeach