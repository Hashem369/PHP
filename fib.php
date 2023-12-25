function fib($num) {
        switch ($num) {
            case 0:
            case 1:
            case 2:
                return 1;
                break;
            
            default:
                # code...
                break;
        }
        return fib($num -1) + fib($num -2);
    }
    echo fib(10);
