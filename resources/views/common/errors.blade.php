// resources/views/common/errors.blade.php

@if (count($errors) > 0)
    <!-- 表單錯誤清單 -->
    <div class="alert alert-danger">
        <strong>哎呀！出了些問題！</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
/**
 * Created by PhpStorm.
 * User: 游智萱
 * Date: 2018/10/19
 * Time: 下午 03:22
 */