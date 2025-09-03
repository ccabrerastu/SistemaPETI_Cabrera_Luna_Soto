<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Iniciar Sesión - PETI</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; }
    @keyframes float { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-10px)} }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-50 via-sky-50 to-purple-50 dark:from-gray-900 dark:via-slate-900 dark:to-indigo-950">

  <!-- Fondo decorativo -->
  <div aria-hidden="true" class="pointer-events-none fixed inset-0 overflow-hidden">
    <div class="absolute -top-24 -left-24 h-72 w-72 rounded-full bg-indigo-300/40 blur-3xl animate-[float_6s_ease-in-out_infinite]"></div>
    <div class="absolute -bottom-32 -right-32 h-96 w-96 rounded-full bg-fuchsia-300/30 blur-3xl animate-[float_8s_ease-in-out_infinite]"></div>
  </div>

  <!-- Card -->
  <div class="relative z-10 max-w-4xl w-full bg-white/80 dark:bg-slate-900/70 rounded-3xl shadow-2xl backdrop-blur-xl border border-slate-200/60 dark:border-white/10 overflow-hidden flex flex-col md:flex-row">
    
    <!-- Panel izquierdo -->
    <div class="w-full md:w-1/2 bg-gradient-to-br from-indigo-600 to-purple-600 text-white flex flex-col justify-center items-center p-10">
      <h2 class="text-4xl font-bold mb-4">¡Bienvenido!</h2>
      <p class="mb-6 text-lg text-indigo-100">¿No tienes una cuenta?</p>
      <a href="registro.php" class="px-6 py-3 rounded-xl bg-white text-indigo-700 font-semibold shadow-lg hover:scale-105 transition">
        Regístrate
      </a>
    </div>

    <!-- Panel derecho -->
    <div class="w-full md:w-1/2 p-10">
      <h3 class="text-3xl font-extrabold text-slate-900 dark:text-white mb-6">Iniciar Sesión</h3>
      
      <!-- En lugar de formulario, un link directo -->
      <div class="space-y-5">
        <div>
          <label class="block text-sm font-medium text-slate-700 dark:text-slate-300">Usuario</label>
          <input type="text" placeholder="Tu usuario"
            class="mt-1 block w-full rounded-xl border border-slate-300 bg-white/70 px-4 py-2 text-slate-900 placeholder-slate-400 shadow-sm dark:border-slate-700 dark:bg-slate-800/70 dark:text-white">
        </div>
        
        <div>
          <label class="block text-sm font-medium text-slate-700 dark:text-slate-300">Contraseña</label>
          <input type="password" placeholder="********"
            class="mt-1 block w-full rounded-xl border border-slate-300 bg-white/70 px-4 py-2 text-slate-900 placeholder-slate-400 shadow-sm dark:border-slate-700 dark:bg-slate-800/70 dark:text-white">
        </div>
        
        <!-- Botón que redirige directo -->
        <a href="../dashboard.php"
          class="block text-center w-full rounded-xl bg-indigo-600 px-4 py-3 font-semibold text-white shadow-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition">
          Iniciar Sesión
        </a>
      </div>
    </div>
  </div>
</body>
</html>
