# 📡 API Reference

Dokumentasi lengkap untuk API Management Crew.

## 🔐 Autentikasi

### Login

```http
POST /api/auth/login
```

**Request Body:**
```json
{
    "email": "user@example.com",
    "password": "password123"
}
```

**Response:**
```json
{
    "status": "success",
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...",
    "user": {
        "id": 1,
        "name": "John Doe",
        "email": "user@example.com"
    }
}
```

### Register

```http
POST /api/auth/register
```

**Request Body:**
```json
{
    "name": "John Doe",
    "email": "user@example.com",
    "password": "password123",
    "password_confirmation": "password123"
}
```

**Response:**
```json
{
    "status": "success",
    "message": "User registered successfully",
    "user": {
        "id": 1,
        "name": "John Doe",
        "email": "user@example.com"
    }
}
```

## 👥 Users API

### Get User Profile

```http
GET /api/user/profile
```

**Headers:**
```
Authorization: Bearer {token}
```

**Response:**
```json
{
    "id": 1,
    "name": "John Doe",
    "email": "user@example.com",
    "created_at": "2024-03-15T12:00:00Z"
}
```

### Update Profile

```http
PUT /api/user/profile
```

**Headers:**
```
Authorization: Bearer {token}
```

**Request Body:**
```json
{
    "name": "John Doe Updated",
    "email": "new.email@example.com"
}
```

## 📋 Projects API

### List Projects

```http
GET /api/projects
```

**Headers:**
```
Authorization: Bearer {token}
```

**Response:**
```json
{
    "data": [
        {
            "id": 1,
            "name": "Project Alpha",
            "description": "Project description",
            "start_date": "2024-03-15",
            "end_date": "2024-04-15",
            "status": "active"
        }
    ],
    "meta": {
        "current_page": 1,
        "total": 10,
        "per_page": 15
    }
}
```

### Create Project

```http
POST /api/projects
```

**Headers:**
```
Authorization: Bearer {token}
```

**Request Body:**
```json
{
    "name": "New Project",
    "description": "Project description",
    "start_date": "2024-03-15",
    "end_date": "2024-04-15",
    "team_members": [1, 2, 3]
}
```

### Update Project

```http
PUT /api/projects/{id}
```

**Headers:**
```
Authorization: Bearer {token}
```

**Request Body:**
```json
{
    "name": "Updated Project Name",
    "description": "Updated description",
    "status": "completed"
}
```

## ✅ Tasks API

### List Tasks

```http
GET /api/tasks
```

**Headers:**
```
Authorization: Bearer {token}
```

**Query Parameters:**
```
project_id: number (optional)
status: string (optional)
assignee_id: number (optional)
```

**Response:**
```json
{
    "data": [
        {
            "id": 1,
            "title": "Task Title",
            "description": "Task description",
            "status": "pending",
            "due_date": "2024-03-20",
            "assignee": {
                "id": 1,
                "name": "John Doe"
            }
        }
    ],
    "meta": {
        "current_page": 1,
        "total": 20,
        "per_page": 15
    }
}
```

### Create Task

```http
POST /api/tasks
```

**Headers:**
```
Authorization: Bearer {token}
```

**Request Body:**
```json
{
    "project_id": 1,
    "title": "New Task",
    "description": "Task description",
    "assignee_id": 2,
    "due_date": "2024-03-20",
    "priority": "high"
}
```

## 📊 Reports API

### Get Team Performance

```http
GET /api/reports/team-performance
```

**Headers:**
```
Authorization: Bearer {token}
```

**Query Parameters:**
```
start_date: string (YYYY-MM-DD)
end_date: string (YYYY-MM-DD)
```

**Response:**
```json
{
    "total_tasks": 150,
    "completed_tasks": 120,
    "completion_rate": 80,
    "team_members": [
        {
            "id": 1,
            "name": "John Doe",
            "tasks_completed": 45,
            "performance_score": 92
        }
    ]
}
```

## ⚠️ Error Responses

### 400 Bad Request
```json
{
    "status": "error",
    "message": "Validation failed",
    "errors": {
        "email": ["The email field is required"],
        "password": ["The password field is required"]
    }
}
```

### 401 Unauthorized
```json
{
    "status": "error",
    "message": "Unauthorized access"
}
```

### 403 Forbidden
```json
{
    "status": "error",
    "message": "You don't have permission to access this resource"
}
```

### 404 Not Found
```json
{
    "status": "error",
    "message": "Resource not found"
}
```

### 500 Server Error
```json
{
    "status": "error",
    "message": "Internal server error"
}
``` 