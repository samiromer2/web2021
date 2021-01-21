<html>
<title>
    Super Market
</title>

<body>

    <center> Super Market</center>
    <a href="myform.php">Stuff form</a>
    <h2>accounts form</h2>
    <form method="POST" action="myformdata2.php">
        <table>
            <tr>
                <td>name</td>
                <td><input name="staffname" type="text" required>

                </td>
            </tr>
            <tr>
                <td>
                    amount </td>
                <td>
                    <input name="phone" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    cash flow
                </td>
                <td>
                    <select name="Gender">
                        <option value="non">Gender</option>
                        <option value="in">in</option>
                        <option value="out">out</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    date </td>
                <td>
                    <input name="address" type="date" required>
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