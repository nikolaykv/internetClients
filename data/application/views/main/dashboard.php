<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Управление</div>
                <div class="card-body">
                    <? if (isset($_SESSION['user'])): ?>
                        <pre>
                            <? var_dump($_SESSION['user']); ?>
                        </pre>
                    <? else: ?>
                        <script type="application/javascript">
                            document.addEventListener("DOMContentLoaded", function(event) {
                               window.location.href = 'http://localhost/login'
                            });
                        </script>
                    <? endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>