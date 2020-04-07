<?php
/**
 * 规范后端 通用返回码
 * Class ReturnCode
 *
 */

class ReturnCode {

    const SUCCESS = 1;
    const INVALID = -1;
    const DB_SAVE_ERROR = -2;
    const DB_READ_ERROR = -3;
    const CACHE_SAVE_ERROR = -4;
    const CACHE_READ_ERROR = -5;
    const FILE_SAVE_ERROR = -6;
    const LOGIN_ERROR = -7;
    const REGISTER_ERROR = -70;
    const NOT_EXISTS = -8;
    const JSON_PARSE_FAIL = -9;
    const TYPE_ERROR = -10;
    const NUMBER_MATCH_ERROR = -11;
    const EMPTY_PARAMS = -12;
    const DATA_EXISTS = -13;
    const AUTH_ERROR = -14;

    const OTHER_LOGIN = -16;
    const VERSION_INVALID = -17;

    const CURL_ERROR = -18;

    const RECORD_NOT_FOUND = -19;
    const DELETE_FAILED = -20;
    const ADD_FAILED = -21;
    const UPDATE_FAILED = -22;

    const PARAM_INVALID = -100;
    const VIP= -200;
    const ACCESS_TOKEN_TIMEOUT = -400;//身份令牌过期
    const SESSION_TIMEOUT = -600;
    const UNKNOWN = -700;
    const EXCEPTION = -800;
    const SEND_OFTEN = -900;

    public static function errorCode($code) {
        $errorInfo = array(
            ReturnCode::SUCCESS              => '请求成功',
            ReturnCode::INVALID              => '非法操作',
            ReturnCode::DB_SAVE_ERROR        => '数据存储失败',
            ReturnCode::DB_READ_ERROR        => '数据读取失败',
            ReturnCode::CACHE_SAVE_ERROR     => '缓存存储失败',
            ReturnCode::CACHE_READ_ERROR     => '缓存读取失败',
            ReturnCode::FILE_SAVE_ERROR      => '文件读取失败',
            ReturnCode::LOGIN_ERROR          => '登录失败',
            ReturnCode::REGISTER_ERROR       => '注册失败',
            ReturnCode::NOT_EXISTS           => '不存在',
            ReturnCode::JSON_PARSE_FAIL      => 'JSON数据格式错误',
            ReturnCode::TYPE_ERROR           => '类型错误',
            ReturnCode::NUMBER_MATCH_ERROR   => '数字匹配失败',
            ReturnCode::EMPTY_PARAMS         => '丢失必要数据',
            ReturnCode::DATA_EXISTS          => '数据已经存在',
            ReturnCode::AUTH_ERROR           => '权限认证失败',
            ReturnCode::OTHER_LOGIN          => '别的终端登录',
            ReturnCode::VERSION_INVALID      => 'API版本非法',
            ReturnCode::CURL_ERROR           => 'CURL操作异常',
            ReturnCode::RECORD_NOT_FOUND     => '记录未找到',
            ReturnCode::DELETE_FAILED        => '删除失败',
            ReturnCode::ADD_FAILED           => '添加记录失败',
            ReturnCode::UPDATE_FAILED        => '更新记录失败',
            ReturnCode::PARAM_INVALID        => '参数非法',
            ReturnCode::ACCESS_TOKEN_TIMEOUT => '身份令牌过期',
            ReturnCode::SESSION_TIMEOUT      => 'SESSION过期',
            ReturnCode::UNKNOWN              => '未知错误',
            ReturnCode::EXCEPTION            => '系统异常',
            ReturnCode::SEND_OFTEN           => '发送频繁',
            ReturnCode::VIP                  => '非会员',
        );
        return isset($errorInfo[$code]) ? $errorInfo[$code] : $code;

    }

}