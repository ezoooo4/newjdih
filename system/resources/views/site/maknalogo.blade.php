<x-app>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
        }

        .logo-section {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        h1 {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #000000;
        }

        h1 span {
            color: orange;
        }

        .pdf-container {
            width: 100%;
            height: 85vh;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        @media (max-width: 768px) {
            .pdf-container {
                height: 70vh;
            }

            h1 {
                font-size: 22px;
            }
        }
    </style>

    <div class="logo-section">
        <h1>MAKNA LOGO <span>JDIH</span></h1>

        <!-- PDF viewer -->
        <iframe 
            src="{{ url('public/landing/assets/document/ML_JDIHN.pdf') }}" 
            class="pdf-container"
        ></iframe>
    </div>
</x-app>
