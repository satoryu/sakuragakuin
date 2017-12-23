<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    </head>
    <body>
        <h1> スコアランキング </h1>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>2010</th>
                    <th>2011</th>
                    <th>2012</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->rank2010 }}</td>
                        <td>{{ $student->rank2011 }}</td>
                        <td>{{ $student->rank2012 }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
