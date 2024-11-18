<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Log;
use Symfony\Component\HttpFoundation\File\File;

class DataLogger
{
    private $start_time;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $this->start_time = microtime(true);
        return $next($request);
    }

    public function terminate($request, $response) { // Функция, которая вызывается после посылки ответа пользователю
        if (env('API_DATALOGGER', true)) {   // Есди в env файле прописана опция API_DATALOGGER = true используем логирование
            if (env('API_DATALOGGER_USE_DB', true)) {       // Есди в env файле прописана опция API_DATALOGGER_USE_DB = true, то для
                                                           //сохранения используем БД, иначе сохраняем просто в файл
                $endTime = microtime(true);
                $log = new Log();
                $log->time = date('Y-m-d H:i:s');
                $log->duration = number_format($endTime - LARAVEL_START, 3);
                $log->ip = $request->ip();
                $log->url = $request->fullUrl();
                $log->method = $request->method();
                $log->input = $request->getContent();
                $log->save(); // Сохранили в базу данных нашу запись
            }
            else {
                // На всякий случай, если опция записи в БД недоступна пишем в файл
                $endTime = microtime(true);
                $filename = 'api_datalogger'. date('d-m-y'). '.log';
                $dataToLog = 'Time'. date('F j, Y, g:i:s'). "\n";
                $dataToLog .= 'Duration'. number_format($endTime - LARAVEL_START, 3). "\n";
                $dataToLog .= 'IP Address'.$request->ip(). "\n";
                $dataToLog .= 'URL'.$request->fullUrl(). "\n";
                $dataToLog .= 'Method'.$request->method(). "\n";
                $dataToLog .= 'Input'. $request->getContent. "\n"();
                // File::append(storage_path('logs'. DIRECTORY_SEPARATOR, $filename), $dataToLog. "\n". str_repeat("^", 20)). "\r\n"; // Записываем в файл
            }
        }
    }
}
