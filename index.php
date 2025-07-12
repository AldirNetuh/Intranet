<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá Aldir, seja Bem vindo à Intranet</title>
    
    <!-- Incluindo o Tailwind CSS para um design moderno -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Incluindo a fonte Inter do Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    
    <style>
        /* Aplicando a fonte Inter como padrão */
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="text-center bg-white p-8 sm:p-12 rounded-xl shadow-lg max-w-md w-full mx-4">
        
        <!-- Logo da Empresa (SVG de exemplo) -->
        <div class="mx-auto mb-6 h-12 w-12 text-blue-600">
            <span style="font-size:2rem;" aria-label="Olá" role="img">👋</span>
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
            </svg>
        </div>

        <!-- Título Principal -->
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-2">
            Bem-vindo à Intranet Aldir!
        </h1>
        
        <!-- Subtítulo / Mensagem -->
        <p class="text-gray-600 mb-8">
            Seu portal central de informações e ferramentas.
        </p>
        
        <!-- Botão de Ação para Login -->
        <a href="login.php" class="inline-block w-full bg-blue-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition-colors duration-300">
            Acessar
        </a>
        
        <!-- Data Atual (PHP) -->
        <p class="text-xs text-gray-400 mt-8">
            Hoje é <?php echo date('d/m/Y'); ?>.
        </p>
        
    </div>

</body>
</html>