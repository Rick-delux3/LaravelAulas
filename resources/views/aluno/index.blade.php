<style>
    :root {
        --primary: #6366f1;
        --primary-hover: #4f46e5;
        --bg-gradient: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        --text-main: #1f2937;
        --text-muted: #6b7280;
        --card-bg: rgba(255, 255, 255, 0.95);
    }

    body {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        background: var(--bg-gradient);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
    }

    .container {
        background: var(--card-bg);
        padding: 2.5rem;
        border-radius: 20px;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        width: 100%;
        max-width: 400px;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.5);
    }

    h2 {
        margin: 0 0 0.5rem 0;
        color: var(--text-main);
        font-size: 1.5rem;
        font-weight: 700;
        text-align: center;
    }

    p.subtitle {
        color: var(--text-muted);
        font-size: 0.875rem;
        text-align: center;
        margin-bottom: 2rem;
    }

    .form-group {
        margin-bottom: 1.25rem;
        position: relative;
    }

    label {
        display: block;
        margin-bottom: 0.5rem;
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--text-main);
        transition: all 0.2s;
    }

    input {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 2px solid #e5e7eb;
        border-radius: 12px;
        font-size: 1rem;
        background-color: #f9fafb;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-sizing: border-box;
    }

    input:focus {
        outline: none;
        border-color: var(--primary);
        background-color: #fff;
        box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
    }

    button {
        width: 100%;
        background-color: var(--primary);
        color: white;
        padding: 0.8rem;
        border: none;
        border-radius: 12px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s;
        margin-top: 1rem;
        box-shadow: 0 4px 6px -1px rgba(99, 102, 241, 0.4);
    }

    button:hover {
        background-color: var(--primary-hover);
        transform: translateY(-1px);
        box-shadow: 0 10px 15px -3px rgba(99, 102, 241, 0.3);
    }

    button:active {
        transform: translateY(0);
    }

    .alert-sucesso {
        margin-top: 1.5rem;
        padding: 0.75rem;
        background-color: #ecfdf5;
        border-left: 4px solid #10b981;
        color: #065f46;
        border-radius: 8px;
        font-size: 0.875rem;
        display: flex;
        align-items: center;
        animation: slideIn 0.3s ease-out;
    }

    @keyframes slideIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<div class="container">
    <h2>Cadastrar Aluno</h2>
    <p class="subtitle">Preencha os dados para o novo registro.</p>

    <form action="{{ route('aluno.adicionar') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome" placeholder="Ex: Lucas Oliveira" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail de Acesso</label>
            <input type="email" name="email" id="email" placeholder="exemplo@email.com" required>
        </div>

        <button type="submit">Salvar Cadastro</button>

        @isset($sucesso)
            <div class="alert-sucesso">
                <svg style="width:20px;height:20px;margin-right:8px" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                {{ $sucesso }}
            </div>
        @endisset
    </form>
</div>
