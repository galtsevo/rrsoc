<?php return array (
  'plugins.generic.orcidProfile.displayName' => 'Модуль «Профиль ORCID»',
  'plugins.generic.orcidProfile.description' => 'Позволяет импортировать информацию профиля пользователя из ORCID.',
  'plugins.generic.orcidProfile.instructions' => 'Вы можете предварительно заполнить эту форму информацией из профиля ORCID. Введите адрес электронной почты или ORCID iD, связанный с профилем ORCID, а затем нажмите «Отправить».',
  'plugins.generic.orcidProfile.noData' => 'Не удается найти данные в ORCID.',
  'plugins.generic.orcidProfile.emailOrOrcid' => 'Адрес электронной почты или ORCID iD:',
  'plugins.generic.orcidProfile.manager.settings.title' => 'Настройки ORCID API',
  'plugins.generic.orcidProfile.manager.settings.hidden' => 'скрыто',
  'plugins.generic.orcidProfile.manager.settings.description' => 'Пожалуйста, настройте доступ ORCID API для получения информации из профиля ORCID в профили пользователя и автора, а также обновления ORCID-записей, связанных с новыми публикациями (только для членов ORCID).',
  'plugins.generic.orcidProfile.manager.settings.description.globallyconfigured' => 'ORCID API был настроен глобально для всего сервера. Были сохранены следующие учетные данные.',
  'plugins.generic.orcidProfile.manager.settings.orcidProfileAPIPath' => 'ORCID API',
  'plugins.generic.orcidProfile.manager.settings.orcidProfileAPIPath.public' => 'Public',
  'plugins.generic.orcidProfile.manager.settings.orcidProfileAPIPath.publicSandbox' => 'Public Sandbox',
  'plugins.generic.orcidProfile.manager.settings.orcidProfileAPIPath.member' => 'Member',
  'plugins.generic.orcidProfile.manager.settings.orcidProfileAPIPath.memberSandbox' => 'Member Sandbox',
  'plugins.generic.orcidProfile.manager.settings.orcidClientId' => 'Client ID',
  'plugins.generic.orcidProfile.manager.settings.orcidClientSecret' => 'Client Secret',
  'plugins.generic.orcidProfile.manager.settings.orcidScope' => 'Profile Access Scope',
  'plugins.generic.orcidProfile.manager.settings.mailSectionTitle' => 'Настройки электронной почты',
  'plugins.generic.orcidProfile.manager.settings.sendMailToAuthorsOnPublication' => 'Отправлять электронной почтой запрос авторизации ORCID авторам статьи, когда статья будет принята, то есть направлена на литературное редактирование',
  'plugins.generic.orcidProfile.manager.settings.logSectionTitle' => 'Журнал запросов ORCID',
  'plugins.generic.orcidProfile.manager.settings.logLevel.help' => 'Выберите глубину ведения журнала данным модулем',
  'plugins.generic.orcidProfile.manager.settings.logLevel.error' => 'Ошибки',
  'plugins.generic.orcidProfile.manager.settings.logLevel.all' => 'Все',
  'plugins.generic.orcidProfile.author.accessDenied' => 'Доступ к ORCID был запрещен на',
  'plugins.generic.orcidProfile.author.accessTokenStored' => 'Запись ORCID предоставила доступ к «{$orcidAccessScope}», действительный до',
  'plugins.generic.orcidProfile.author.requestAuthorization' => 'Отправить электронной почтой письмо для запроса авторизации ORCID у поставщика',
  'plugins.generic.orcidProfile.author.deleteORCID' => 'Удалить ORCID iD и токен доступа!',
  'plugins.generic.orcidProfile.author.orcidEmptyNotice' => 'Прочтите ниже для запроса авторизованного ORCID iD',
  'plugins.generic.orcidProfile.author.unauthenticated' => 'ORCID iD не авторизован! Пожалуйста, запросите авторизацию у поставщика.',
  'plugins.generic.orcidProfile.verify.title' => 'Авторизация ORCID',
  'plugins.generic.orcidProfile.verify.sendSubmissionToOrcid.success' => 'Материал был добавлен к вашей записи ORCID.',
  'plugins.generic.orcidProfile.verify.sendSubmissionToOrcid.failure' => 'Материал не удается добавить к вашей записи ORCID.',
  'plugins.generic.orcidProfile.verify.sendSubmissionToOrcid.notpublished' => 'Материал будет добавлен к вашей записи ORCID во время публикации.',
  'plugins.generic.orcidProfile.verify.success' => 'Ваш ORCID iD был проверен и успешно связан с публикацией.',
  'plugins.generic.orcidProfile.verify.failure' => 'Ваш ORCID iD не удается проверить. Ссылка больше не действительна.',
  'plugins.generic.orcidProfile.verify.duplicateOrcid' => 'ORCID iD был уже сохранен для этого материала.',
  'plugins.generic.orcidProfile.verify.denied' => 'Вы запретили доступ к вашей записи ORCID.',
  'plugins.generic.orcidProfile.authFailure' => 'Ссылка авторизации ORCID уже была использована или является некорректной.',
  'plugins.generic.orcidProfile.failure.contact' => 'Пожалуйста, свяжитесь с управляющим журнала, сообщив ему Ваше имя, ORCID iD и информацию о Вашем материале.',
  'plugins.generic.orcidProfile.fieldset' => 'ORCID',
  'plugins.generic.orcidProfile.connect' => 'Создать или подключить ваш ORCID iD',
  'plugins.generic.orcidProfile.authorise' => 'Авторизовать или подключить ваш ORCID iD',
  'plugins.generic.orcidProfile.about.title' => 'Что такое ORCID?',
  'plugins.generic.orcidProfile.about.orcidExplanation' => 'ORCID — это независимая некоммерческая организация, которая предоставляет постоянный идентификатор ORCID iD, отличающий Вас от других исследователей, и механизм связывания результатов Ваших исследований и активности с Вашим iD. ORCID интегрирован во множество систем, используемых издателями, грантовыми фондами, организациями и другими службами, связанными с исследованиями. Подробности на <a href="https://orcid.org">orcid.org</a>.',
  'plugins.generic.orcidProfile.about.howAndWhy.title' => 'Как и почему мы собираем ORCID iD?',
  'plugins.generic.orcidProfile.about.howAndWhyPublicAPI' => 'Этот журнал собирает ORCID iD, чтобы мы и широкое сообщество могли быть уверены, что Вас правильно идентифицировали и сопоставили с вашими публикациями. Это гарантирует, что все ваши работы будут связаны с вами на протяжении всей вашей карьеры.<br>
	Когда вы щелкните на кнопке «Авторизовать» во всплывающем окне ORCID, мы попросим Вас поделиться вашим iD, используя процесс авторизации: либо зарегистрируйте себе ORCID iD, либо, если он у вас уже есть, войдите в вашу учетную запись ORCID, а затем дайте нам разрешение получать информацию о Вашем ORCID iD. Мы делаем это, чтобы удостовериться, что Вы правильно идентифицированы, а также чтобы безопасным образом подключить Ваш ORCID iD.<br>
	Подробности описаны в <a href="https://orcid.org/blog/2017/02/20/whats-so-special-about-signing">«What’s so special about signing in».</a><br>
Этот журнал собирает и показывает iD авторизованных авторов и соавторов на страницах профиля и статьи.',
  'plugins.generic.orcidProfile.about.howAndWhyMemberAPI' => 'Этот журнал собирает ORCID iD, чтобы мы и широкое сообщество могли быть уверены, что Вас правильно идентифицировали и сопоставили с вашими публикациями. Это гарантирует, что все ваши работы будут связаны с вами на протяжении всей вашей карьеры.<br>
	Когда вы щелкните на кнопке «Авторизовать» во всплывающем окне ORCID, мы попросим Вас поделиться вашим iD, используя процесс авторизации: либо зарегистрируйте себе ORCID iD, либо, если он у вас уже есть, войдите в вашу учетную запись ORCID, а затем дайте нам разрешение получать информацию о Вашем ORCID iD. Мы делаем это, чтобы удостовериться, что Вы правильно идентифицированы, а также чтобы безопасным образом подключить Ваш ORCID iD.<br>
	Подробности описаны в <a href="https://orcid.org/blog/2017/02/20/whats-so-special-about-signing">«What’s so special about signing in».</a><br>
	Этот журнал собирает и показывает iD авторизованных авторов и соавторов на страницах профиля и статьи. Кроме того, метаданные статьи будут автоматически переданы в вашу запись ORCID, позволяя нам помочь поддерживать список ваших статей в актуальном состоянии. Подробности на <a href="https://orcid.org/blog/2017/08/10/six-ways-make-your-orcid-id-work-you">«Six ways to make your ORCID iD work for you!»</a>
',
  'plugins.generic.orcidProfile.about.display.title' => 'Где показываются ORCID iDs?',
  'plugins.generic.orcidProfile.about.display' => 'Чтобы подтвердить, что Вы воспользовались своим iD и Вы были авторизованы, мы показываем значок ORCID iD <img src="https://orcid.org/sites/default/files/images/orcid_16x16(1).gif" alt="iD icon" width="16" height="16" border="0"> рядом с Вашим именем на странице с Вашим опубликованным материалом и на странице Вашего профиля пользователя.<br>
		Подробности описаны в <a href="https://orcid.org/blog/2013/02/22/how-should-orcid-id-be-displayed">«How should an ORCID iD be displayed».</a>',
);