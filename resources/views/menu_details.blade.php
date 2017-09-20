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
                                    <td>{!! $menu->id !!} </td>
                                    <td>{!! $menu->menu_name !!}</td>
                                    <td>{!! $menu->menu_desc !!}</td>
                                    <td>{!! $menu->menu_rating !!}</td>
                                    <td><button>Add to Cart</button></td>
                                </tr>
                        </tbody>
                    </table>
</body>
</html>