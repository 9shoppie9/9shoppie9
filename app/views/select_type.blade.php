<!DOCTYPE html>
<html>
    @include('default/header')
  
        <div class='main-content' style='min-height: 650px'>
            <div ng-view>

            </div>               
        </div>
        <div id="footer" class="container-fluid" style="margin-top:300px;">
            <nav class="navbar navbar-default navbar-static-bottom">
                <p class="well-sm"><b> Copyrights @ hiShoppie 2014</b></p>
            </nav>
        </div>
    </body>
</html>