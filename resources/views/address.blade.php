@extends('base')

@section('content')

    <table class="table" id="list">

        <tr>
            <th>
                Address
            </th>
            <td> {{$address->address}}</td>
        </tr>
        <tr>
            <th>
                District
            </th>
            <td> {{$address->district}}</td>
        </tr>

        <tr>
            <th>
                Address 2
            </th>
            <td> {{$address->address2}}</td>
        </tr>

        <tr>
            <th>
              City ID
            </th>
            <td> {{$address->city_id}}</td>
        </tr>

        <tr>
            <th>
                postal code
            </th>
            <td> {{$address->postal_code}}</td>
        </tr>


        <tr>
            <th>
                Phone
            </th>
            <td> {{$address->phone}}</td>
        </tr>


        <tr>
            <th>
                Location
            </th>
            <td> {{$address->location}}</td>
        </tr>
    </table>

@endsection