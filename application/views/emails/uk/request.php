<?php
/*
 * This file is part of Jorani.
 *
 * Jorani is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jorani is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jorani.  If not, see <http://www.gnu.org/licenses/>.
 */

    //You can change the content of this template
?>
<html lang="en">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta charset="UTF-8">
        <style>
            table {width:50%;margin:5px;border-collapse:collapse;}
            table, th, td {border: 1px solid black;}
            th, td {padding: 20px;}
            h5 {color:red;}
        </style>
    </head>
    <body>
        <h3>{Title}</h3>
        {Firstname} {Lastname} відправив заяву на відпустку. <a href="{BaseUrl}leaves/{LeaveId}">Подробиці</a> нижче:
        <table border="0">
            <tr>
                <td>Від &nbsp;</td><td>{StartDate}&nbsp;({StartDateType})</td>
            </tr>
            <tr>
                <td>До &nbsp;</td><td>{EndDate}&nbsp;({EndDateType})</td>
            </tr>
            <tr>
                <td>Тип &nbsp;</td><td>{Type}</td>
            </tr>
            <tr>
                <td>Тривалість &nbsp;</td><td>{Duration}</td>
            </tr>
            <tr>
                <td>Сальдо &nbsp;</td><td>{Balance}</td>
            </tr>
            <tr>
                <td>Причина &nbsp;</td><td>{Reason}</td>
            </tr>
            <tr>
                <td><a href="{BaseUrl}requests/accept/{LeaveId}">Accept</a> &nbsp;</td><td><a href="{BaseUrl}requests/reject/{LeaveId}">Reject</a></td>
            </tr>
        </table>
        <br />
        Ви можете перевірити <a href="{BaseUrl}hr/counters/collaborators/{UserId}">сальдо по відпустках</a> перед затвердженням заяви.
        <hr>
        <h5>*** Це повідомлення створене автоматично, будь ласка не відповідайте на нього ***</h5>
    </body>
</html>
