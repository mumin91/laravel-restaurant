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
                                <tr>
                                    <td>{!! $menu_details->id !!} </td>
                                    <td>{!! $menu_details->menu_name !!}</td>
                                    <td>{!! $menu_details->menu_desc !!}</td>
                                    <td>{!! $menu_details->menu_rating !!}</td>
                                </tr>
                        </tbody>
                    </table>
</body>
</html>