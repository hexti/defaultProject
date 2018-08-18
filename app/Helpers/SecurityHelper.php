<?php

namespace SysPlenus\Helpers;


class SecurityHelper
{
    /**
     * Gera um token único
     *
     * @return string
     */
    public static function csrfToken() {
        $dado = sha1(time().userId());
        $hash = password_hash($dado, PASSWORD_DEFAULT);
        $_SESSION['hash'] = password_hash($hash, PASSWORD_DEFAULT);
        return $hash;
    }

    /**
     * Verifica se um token é válido
     *
     * @param $token string
     * @return bool
     */
    public static function csrfCheck($token) {
        if (password_verify($token, $_SESSION['hash'])) {
            return true;
        }
        return false;
    }

    public static function filtraDado($dado)
    {
        $dadoFiltrado = filter_var($dado, FILTER_SANITIZE_MAGIC_QUOTES);
        $dadoFiltrado = filter_var($dadoFiltrado, FILTER_SANITIZE_SPECIAL_CHARS);
        return $dadoFiltrado;
    }
}