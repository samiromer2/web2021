<html>
<title>
    Super Market
</title>

<body>

    <center> Super Market</center>
    <a href="myform2.php">Account form</a>
    <h2>Stuff form</h2>
    <form method="POST" action="myformdata.php">
        <table>
            <tr>
                <td>staff</td>
                <td><input name="staffname" type="text" required>

                </td>
            </tr>
            <tr>
                <td>
                    phone </td>
                <td>
                    <input name="phone" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    gender
                </td>
                <td>
                    <select name="Gender">
                        <option value="non">Gender</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    address </td>
                <td>
                    <input name="address" type="text" required>
                </td>
            </tr>


            <tr>
                <td>
                </td>
                <td>
                    <input type="submit" value="Save">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>