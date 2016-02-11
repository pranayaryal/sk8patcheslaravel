@extends('layouts.app2')

@section('content')
    <form action="/items" method="post">
        {{csrf_field()}}

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Store</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6 col-md-3">
                            <a href="" class="thumbnail">
                                <img src="http://www.ganpatraofarmandnursery.com/wp-content/uploads/2015/04/Fountain-Spray-Rings.jpg" alt="">
                            </a>
                            <input type="hidden" name="pranay" value="pranay">
                            <button type="submit" class="btn btn-warning">Add This Item</button>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <a href="" class="thumbnail">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/93/Alliance_Central_Park_fountain_9.JPG" alt="">
                            </a>
                            <input type="hidden" name="aryal" value="aryal">
                            <button type="submit" class="btn btn-info">Add This Item</button>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <a href="" class="thumbnail">
                                <img src="http://st.hzcdn.com/simgs/bec10d4a019e033a_4-6022/traditional-outdoor-fountains-and-ponds.jpg" alt="">
                            </a>
                            <input type="hidden" name="simon" value="simon">
                            <button type="submit" class="btn btn-success">Add This Item</button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </form>

@stop