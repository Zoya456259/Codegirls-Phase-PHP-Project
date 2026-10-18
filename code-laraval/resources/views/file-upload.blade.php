
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact & File Upload</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 40px 16px;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 35px;
            border-radius: 14px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            margin-bottom: 10px;
            color:#1D3557;
            font-size: 28px;
        }

        .header p {
            color: #64748b;
            line-height: 1.6;
        }

        .form-row {
            display: flex;
            gap: 18px;
        }

        .form-group {
            flex: 1;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            font-size: 14px;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 7px;
            font-size: 14px;
            background: white;
        }

        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 3px #e0e7ff;
        }

        textarea {
            resize: vertical;
            min-height: 110px;
        }

        input[type="file"] {
            background: #f8fafc;
        }

        .hint {
            color: #64748b;
            font-size: 12px;
            margin-top: 7px;
        }

        button {
            width: 100%;
            padding: 14px;
            background: #1D3557;
            color: white;
            border: none;
            border-radius: 7px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: rgb(85, 72, 72);
        }

        .success {
            background: #dcfce7;
            color: #166534;
            padding: 14px;
            border-radius: 7px;
            margin-bottom: 20px;
        }

        .error {
            color: #dc2626;
            font-size: 13px;
            margin-top: 5px;
        }

        @media (max-width: 550px) {
            .container {
                padding: 22px;
            }

            .form-row {
                flex-direction: column;
                gap: 0;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
    <h1>Personal Info</h1>
    </div>

    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('file.upload') }}" method="POST"
          enctype="multipart/form-data">

        @csrf

        <div class="form-row">
            <div class="form-group">
                <label for="name">Full Name *</label>
                <input type="text" id="name" name="name"
                       value="{{ old('name') }}"
                       placeholder="Enter your full name" required>
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email"
                       value="{{ old('email') }}"
                       placeholder="example@email.com" required>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone"
                       value="{{ old('phone') }}"
                       placeholder="03XX XXXXXXX">
                @error('phone')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="subject">Subject *</label>
                <select id="subject" name="subject" required>
                    <option value="">Select a subject</option>
                    <option value="Assignment">Assignment</option>
                    <option value="Document">Document</option>
                    <option value="Other">Other</option>
                </select>
                @error('subject')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="message">Message *</label>
            <textarea id="message" name="message"
                      placeholder="Write your message here..."
                      required>{{ old('message') }}</textarea>
            @error('message')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="file">Attach File *</label>
            <input type="file" id="file" name="file" required>
            <p class="hint">Maximum file size: 2 MB.</p>
            @error('file')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Submit Form</button>

    </form>

</div>

</body>
</html>
