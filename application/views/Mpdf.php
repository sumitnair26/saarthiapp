<html>
<head>
<style>
    @page {
        size: auto;
        odd-header-name: html_myHeader1;
        even-header-name: html_myHeader2;
        odd-footer-name: html_myFooter1;
        even-footer-name: html_myFooter2;
    }
    @page chapter2 {
        odd-header-name: html_Chapter2HeaderOdd;
        even-header-name: html_Chapter2HeaderEven;
        odd-footer-name: html_Chapter2FooterOdd;
        even-footer-name: html_Chapter2FooterEven;
    }
    @page noheader {
        odd-header-name: _blank;
        even-header-name: _blank;
        odd-footer-name: _blank;
        even-footer-name: _blank;
    }
    div.chapter2 {
        page-break-before: right;
        page: chapter2;
    }
    div.noheader {
        page-break-before: right;
        page: noheader;
    }
</style>
</head>

<body>

    <htmlpageheader name="myHeader1" style="display:none">
        <div style="text-align: right; border-bottom: 1px solid #000000; font-weight: bold; font-size: 10pt;">
            My document
        </div>
    </htmlpageheader>

    <htmlpageheader name="myHeader2" style="display:none">
        <div style="border-bottom: 1px solid #000000; font-weight: bold;  font-size: 10pt;">
            My document
        </div>
    </htmlpageheader>

    <htmlpagefooter name="myFooter1" style="display:none">
        <table width="100%">
            <tr>
                <td width="33%">
                    <span style="font-weight: bold; font-style: italic;">{DATE j-m-Y}</span>
                </td>
                <td width="33%" align="center" style="font-weight: bold; font-style: italic;">
                    {PAGENO}/{nbpg}
                </td>
                <td width="33%" style="text-align: right;">
                    My document
                </td>
            </tr>
        </table>
    </htmlpagefooter>

    <htmlpagefooter name="myFooter2" style="display:none">
        <table width="100%">
            <tr>
                <td width="33%">My document</td>
                <td width="33%" align="center">{PAGENO}/{nbpg}</td>
                <td width="33%" style="text-align: right;">{DATE j-m-Y}</td>
            </tr>
        </table>
    </htmlpagefooter>

    <htmlpageheader name="Chapter2HeaderOdd" style="display:none">
        <div style="text-align: right;">Chapter 2</div>
    </htmlpageheader>

    <htmlpageheader name="Chapter2HeaderEven" style="display:none">
        <div>Chapter 2</div>
    </htmlpageheader>

    <htmlpagefooter name="Chapter2FooterOdd" style="display:none">
        <div style="text-align: right;">Chapter 2 Footer</div>
    </htmlpagefooter>

    <htmlpagefooter name="Chapter2FooterEven" style="display:none">
        <div>Chapter 2 Footer</div>
    </htmlpagefooter>

    Hello World

    <div class="chapter2">Text of Chapter 2</div>

    <div class="noheader">No-Header page</div>

</body>
</html>