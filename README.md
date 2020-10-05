<p align="center"><img src="https://deploy.agapesolucoes.com.br/media/logos/AGP/logo-blue.svg" width="400"></p>

# AGPIX

### Introdução

Pacote para Laravel de funções úteis e classes base.
Contém
- NotificationController: Possui os métodos para marcar como lido uma ou todas as notificações.
- Web: Possui as rotas para marcar como lido uma ou todas as notificações.
- DataBaseNotification: Possui a sobreescrita da tabela e conexão para notificações.
- Trait HasDatabaseNotifications.php: Possui, Notifiable.php: Possui a sobreescrita para entidade DataBaseNotification. 

### Git do projeto
[package-notification](https://git.agapesolucoes.com.br/AGP/package-notification)

### Fórum de discução
[Fórum AGP](https://www.agapesolucoes.com.br/forum)

### Instalação

Verifique as dependencias desse pacote.

Variáveis de ambiente:
- ``NOTIFICATION_TABLE``: Tabela que contém as notificações (log_notifications).
- ``NOTIFICATION_CONNECTION``: Nome da conexão para a tabela de notificação.

Execute no projeto que deseja instalar o pacote:

```bash
composer require agp/notification
```

```bash
php artisan vendor:publish --provider=Agp\Notification\AgpNotificationServiceProvider
```

```bash
php artisan config:cache
```

### Copyright

AGP @ 2020

