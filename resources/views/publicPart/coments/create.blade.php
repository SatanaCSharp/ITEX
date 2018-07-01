@extends('publicPart.layouts.app')

@section(content)
    <div class="create-coments col-md-10">
        <div class="form-group row">
            <div class="btn-add col-md-3">
                <ul class="nav flex-column">
                    <li>
                        <button type="button" id="create-coment" class="btn btn-primary">Add coment</button>
                    </li>
                    <li class="com-num">
                        <span>Coments: 2</span>
                    </li>

                </ul>
            </div>

            <div class="col-md-6">
                <textarea class="form-control coments-fild" rows="5" id="comment"></textarea>
            </div>
        </div>
        <div class="coments col-md-10">
            <div class="coment-desk">
                <div class="user-fild">
                    <div class="date-name">
                        <span class="labal-name">Name: </span>
                        <span class="name-in-coment">MaxVkepke</span>
                    </div>
                    <span class="date-time-coment">13.04.1988 3:00</span>

                </div>

                <span class="text-coment">  Good excursion. Thank you to the organizer.</span>
            </div>
    </div>
    @endsection