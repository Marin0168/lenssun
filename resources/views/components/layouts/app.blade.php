<!doctype html>
<html lang="nl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>@yield('title', 'Lens-Sun - Verduisterende Sportlenzen')</title>
    <meta name="description" content="@yield('meta_description', 'Verduisterende sportlenzen voor buitensporters. Blokkeer fel zonlicht, zie scherper en presteer beter. UV-bescherming en op maat vervaardigd.')">
    <link rel="canonical" href="@yield('canonical', 'https://www.lens-sun.com/')" />


    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              bg: 'var(--bg)',
              surface: 'var(--surface)',
              text: 'var(--text)',
              primary: 'var(--primary)',
              secondary: 'var(--secondary)'
            }
          }
        }
      }
    </script>

    @stack('head')
  </head>

  <body class="min-h-screen bg-bg text-text antialiased overflow-x-hidden font-sans">
    <div id="app">
      @include('components.navbar')

      {{-- Pagina-inhoud komt hier in het slot --}}
      {{ $slot }}
    </div>

    {{-- Scripts van pagina’s/components --}}
    @stack('scripts')
  </body>
</html>
