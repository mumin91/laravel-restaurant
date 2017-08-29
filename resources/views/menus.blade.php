<!DOCTYPE html>
<html>
<head>
	<title>Menus</title>
</head>
<body>
<table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Menu name</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($menus as $menu)
                                <tr>
                                    <td><a href="{!! action('MenuController@show', $menu->id) !!}">{!! $menu->id !!} </a></td>
                                    <td>{!! $menu->menu_name !!}</td>
                                    <td>{!! $menu->menu_desc !!}</td>
                                    <td>{!! $menu->menu_rating !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
</body>
</html>