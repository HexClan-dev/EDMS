<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/assistant')) {
            // assistant
            if ('/assistant' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AssistantController::homepageAction',  '_route' => 'assistant',);
            }

            if (0 === strpos($pathinfo, '/assistant/events')) {
                // events
                if ('/assistant/events' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\AssistantController::indexAction',  '_route' => 'events',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_events;
                    }

                    return $ret;
                }
                not_events:

                // new_event
                if ('/assistant/events/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\AssistantController::createEventAction',  '_route' => 'new_event',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_new_event;
                    }

                    return $ret;
                }
                not_new_event:

            }

            // students
            if ('/assistant/students' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AssistantController::reportStudentAction',  '_route' => 'students',);
            }

            if (0 === strpos($pathinfo, '/assistant/p')) {
                if (0 === strpos($pathinfo, '/assistant/performance')) {
                    // performance
                    if ('/assistant/performance' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\AssistantController::performanceAction',  '_route' => 'performance',);
                    }

                    // new_performance
                    if (0 === strpos($pathinfo, '/assistant/performance/new') && preg_match('#^/assistant/performance/new/(?P<student_>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'new_performance')), array (  '_controller' => 'AppBundle\\Controller\\AssistantController::createPerformanceAction',));
                    }

                }

                // show_profile_assistant
                if ('/assistant/profile/show' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\AssistantController::showProfileAction',  '_route' => 'show_profile_assistant',);
                }

                // edit_profile_assistant
                if ('/assistant/profile/edit' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\AssistantController::editProfileAction',  '_route' => 'edit_profile_assistant',);
                }

            }

            elseif (0 === strpos($pathinfo, '/assistant/report/technical/problem')) {
                // report_tech_problem
                if ('/assistant/report/technical/problem' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\AssistantController::reportTechProblemAction',  '_route' => 'report_tech_problem',);
                }

                // tech_problems_assistant
                if ('/assistant/report/technical/problem' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\AssistantController::techProblemsAction',  '_route' => 'tech_problems_assistant',);
                }

            }

            // approve_problem
            if (0 === strpos($pathinfo, '/assistant/technical/problem/confirm') && preg_match('#^/assistant/technical/problem/confirm/(?P<techProblems>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'approve_problem')), array (  '_controller' => 'AppBundle\\Controller\\AssistantController::fixedTechProblemAction',));
            }

        }

        // dorm_application
        if ('/apply' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::applicationFormAction',  '_route' => 'dorm_application',);
        }

        if (0 === strpos($pathinfo, '/director')) {
            // camera_show
            if ('/director/camera/show' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CameraManagementController::showCameraInformation',  '_route' => 'camera_show',);
            }

            // delete_camera
            if (0 === strpos($pathinfo, '/director/camera/delete') && preg_match('#^/director/camera/delete/(?P<camera_id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_camera')), array (  '_controller' => 'AppBundle\\Controller\\CameraManagementController::deleteCameraImages',));
            }

            if (0 === strpos($pathinfo, '/director/logs')) {
                // today_logs
                if ('/director/logs/today' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CameraManagementController::getTodaysLogAction',  '_route' => 'today_logs',);
                }

                // all_logs
                if ('/director/logs/all' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CameraManagementController::getAllLogsAction',  '_route' => 'all_logs',);
                }

                // delete_log
                if (0 === strpos($pathinfo, '/director/logs/delete') && preg_match('#^/director/logs/delete/(?P<log_id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_log')), array (  '_controller' => 'AppBundle\\Controller\\CameraManagementController::deletelogs',));
                }

            }

            // show_log_content
            if (0 === strpos($pathinfo, '/director/log') && preg_match('#^/director/log/(?P<log_id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_log_content')), array (  '_controller' => 'AppBundle\\Controller\\CameraManagementController::showLogContent',));
            }

            // director
            if ('/director' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DirectorController::homepageAction',  '_route' => 'director',);
            }

            // manage_assistants
            if ('/director/manage/assistants' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DirectorController::showAssistantsAction',  '_route' => 'manage_assistants',);
            }

            // accept_reject_applicants
            if (0 === strpos($pathinfo, '/director/manage/applicant') && preg_match('#^/director/manage/applicant/(?P<dormapplication>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'accept_reject_applicants')), array (  '_controller' => 'AppBundle\\Controller\\DirectorController::Accept_RejectApplicantsAction',));
            }

            if (0 === strpos($pathinfo, '/director/d')) {
                // delete_assistants
                if (0 === strpos($pathinfo, '/director/delete/assistant') && preg_match('#^/director/delete/assistant/(?P<user_id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_assistants')), array (  '_controller' => 'AppBundle\\Controller\\DirectorController::deleteAssistantAction',));
                }

                // delete_images_from_server
                if (0 === strpos($pathinfo, '/director/delete/member') && preg_match('#^/director/delete/member/(?P<mem_id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_images_from_server')), array (  '_controller' => 'AppBundle\\Controller\\DirectorController::removeImagesToEntranceSecurityAction',));
                }

                // dormitory_members
                if ('/director/dormitory/members' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DirectorController::showAllMembers',  '_route' => 'dormitory_members',);
                }

            }

            // add_assistants
            if ('/director/add/assistant' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DirectorController::addAssistantsAction',  '_route' => 'add_assistants',);
            }

            if (0 === strpos($pathinfo, '/director/academic/year')) {
                // academic_year
                if ('/director/academic/year' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DirectorController::showAcademicYearAction',  '_route' => 'academic_year',);
                }

                // academic_year_info
                if (0 === strpos($pathinfo, '/director/academic/year/info') && preg_match('#^/director/academic/year/info/(?P<aca>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'academic_year_info')), array (  '_controller' => 'AppBundle\\Controller\\DirectorController::show_info_ofAcademicYearAction',));
                }

                // new_academic_year
                if ('/director/academic/year/new' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DirectorController::add_academicYearAction',  '_route' => 'new_academic_year',);
                }

                // edit_academic_year
                if (0 === strpos($pathinfo, '/director/academic/year/edit') && preg_match('#^/director/academic/year/edit/(?P<ac>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_academic_year')), array (  '_controller' => 'AppBundle\\Controller\\DirectorController::edit_academicYearAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/director/show')) {
                // applicants_show
                if ('/director/show/applications' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DirectorController::showApplicantsAction',  '_route' => 'applicants_show',);
                }

                // show_applicants_info
                if (0 === strpos($pathinfo, '/director/show/applied/info') && preg_match('#^/director/show/applied/info/(?P<person>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_applicants_info')), array (  '_controller' => 'AppBundle\\Controller\\DirectorController::showApplicantsDetailsAction',));
                }

                // show_information
                if (0 === strpos($pathinfo, '/director/show/info') && preg_match('#^/director/show/info/(?P<person>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_information')), array (  '_controller' => 'AppBundle\\Controller\\DirectorController::showDetailsAction',));
                }

            }

            // student_performances
            if ('/director/students/performances' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DirectorController::showStudentPreformancesAction',  '_route' => 'student_performances',);
            }

            // send_images_to_server
            if (0 === strpos($pathinfo, '/director/register/member') && preg_match('#^/director/register/member/(?P<mem_id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'send_images_to_server')), array (  '_controller' => 'AppBundle\\Controller\\DirectorController::sendImagesToEntranceSecurityAction',));
            }

            // technical_problems
            if ('/director/technical/problems' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DirectorController::showTechnicalProblemsAction',  '_route' => 'technical_problems',);
            }

            if (0 === strpos($pathinfo, '/director/event')) {
                // events_show
                if ('/director/events/show' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DirectorController::showEvents',  '_route' => 'events_show',);
                }

                // invited_events
                if (0 === strpos($pathinfo, '/director/event/participating') && preg_match('#^/director/event/participating/(?P<eventParticiating>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'invited_events')), array (  '_controller' => 'AppBundle\\Controller\\DirectorController::acceptInvitation',));
                }

                // acc_reje_events
                if (preg_match('#^/director/event/(?P<event>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acc_reje_events')), array (  '_controller' => 'AppBundle\\Controller\\DirectorController::acceptEvents',));
                }

            }

            elseif (0 === strpos($pathinfo, '/director/pr')) {
                // print_contracts
                if (0 === strpos($pathinfo, '/director/print/contracts') && preg_match('#^/director/print/contracts/(?P<student_id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'print_contracts')), array (  '_controller' => 'AppBundle\\Controller\\DirectorController::printContracts',));
                }

                // director_show_profile
                if ('/director/profile/show' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DirectorController::showProfileAction',  '_route' => 'director_show_profile',);
                }

                // director_edit_profile
                if ('/director/profile/edit' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DirectorController::editProfileAction',  '_route' => 'director_edit_profile',);
                }

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        // information
        if ('/information' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexInformation',  '_route' => 'information',);
        }

        if (0 === strpos($pathinfo, '/finance')) {
            // finance
            if ('/finance' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\FinanceController::indexAction',  '_route' => 'finance',);
            }

            if (0 === strpos($pathinfo, '/finance/s')) {
                if (0 === strpos($pathinfo, '/finance/showstudent')) {
                    // show_student
                    if ('/finance/showstudent' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\FinanceController::showstudentAction',  '_route' => 'show_student',);
                    }

                    // id_show
                    if (preg_match('#^/finance/showstudent/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'id_show')), array (  '_controller' => 'AppBundle\\Controller\\FinanceController::showAction',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_id_show;
                        }

                        return $ret;
                    }
                    not_id_show:

                }

                // show_payments
                if ('/finance/show/payments' === $pathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\FinanceController::showPaymentAction',  '_route' => 'show_payments',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_show_payments;
                    }

                    return $ret;
                }
                not_show_payments:

                // add_payments
                if (0 === strpos($pathinfo, '/finance/student/payment/add') && preg_match('#^/finance/student/payment/add/(?P<p_ers>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_payments')), array (  '_controller' => 'AppBundle\\Controller\\FinanceController::addPaymentsAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/finance/profile')) {
                // profile
                if ('/finance/profile' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\FinanceController::profileAction',  '_route' => 'profile',);
                }

                // edit
                if ('/finance/profile/edit' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\FinanceController::editProfileAction',  '_route' => 'edit',);
                }

            }

        }

        // redirect_pages
        if ('/redirect' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::redirectAction',  '_route' => 'redirect_pages',);
        }

        // get_camera_info
        if ('/report/server' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\ServerManageController::getDataAction',  '_route' => 'get_camera_info',);
        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
        }

        // check_credentials
        if ('/check' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::checkAction',  '_route' => 'check_credentials',);
        }

        if (0 === strpos($pathinfo, '/student')) {
            // student
            if ('/student' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StudentController::homepageAction',  '_route' => 'student',);
            }

            // view_assistant_stud
            if ('/student/assistants' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StudentController::showAssistantsAction',  '_route' => 'view_assistant_stud',);
            }

            // show_information_stud
            if (0 === strpos($pathinfo, '/student/show/info') && preg_match('#^/student/show/info/(?P<person>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_information_stud')), array (  '_controller' => 'AppBundle\\Controller\\StudentController::showDetailsAction',));
            }

            if (0 === strpos($pathinfo, '/student/p')) {
                // report_problem_stud
                if ('/student/problem' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\StudentController::formReport',  '_route' => 'report_problem_stud',);
                }

                if (0 === strpos($pathinfo, '/student/profile')) {
                    // show_profile_stud
                    if ('/student/profile' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\StudentController::showProfileAction',  '_route' => 'show_profile_stud',);
                    }

                    // edit_profile_stud
                    if ('/student/profile/edit' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\StudentController::editProfileAction',  '_route' => 'edit_profile_stud',);
                    }

                }

                // view_payments_stud
                if ('/student/payments' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\StudentController::showPayments',  '_route' => 'view_payments_stud',);
                }

            }

            // report_discipline
            if ('/student/discipline' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StudentController::discipline',  '_route' => 'report_discipline',);
            }

            // show_events_stud
            if ('/student/events' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\StudentController::showEvents',  '_route' => 'show_events_stud',);
            }

            // invited_events_stud
            if (0 === strpos($pathinfo, '/student/event/participating') && preg_match('#^/student/event/participating/(?P<ventParticiating>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'invited_events_stud')), array (  '_controller' => 'AppBundle\\Controller\\StudentController::acceptInvitation',));
            }

        }

        // tech
        if ('/tech' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\TechController::homepageAction',  '_route' => 'tech',);
        }

        if (0 === strpos($pathinfo, '/tech/pro')) {
            // show_profile_tech
            if ('/tech/profile/show' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\TechController::showProfileAction',  '_route' => 'show_profile_tech',);
            }

            // edit_profile_tech
            if ('/tech/profile/edit' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\TechController::editProfileAction',  '_route' => 'edit_profile_tech',);
            }

            if (0 === strpos($pathinfo, '/tech/problems')) {
                // tech_tech_problems
                if ('/tech/problems/view' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\TechController::showTechnicalProblemsAction',  '_route' => 'tech_tech_problems',);
                }

                // considering_tech_problems
                if (0 === strpos($pathinfo, '/tech/problems/consider') && preg_match('#^/tech/problems/consider/(?P<prob_id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'considering_tech_problems')), array (  '_controller' => 'AppBundle\\Controller\\TechController::addIntoConsiderAction',));
                }

                // unconsidering_tech_problems
                if (0 === strpos($pathinfo, '/tech/problems/unconsider') && preg_match('#^/tech/problems/unconsider/(?P<prob_id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'unconsidering_tech_problems')), array (  '_controller' => 'AppBundle\\Controller\\TechController::addIntoUnconsiderAction',));
                }

                // unfixing_tech_problems
                if (0 === strpos($pathinfo, '/tech/problems/unfixed') && preg_match('#^/tech/problems/unfixed/(?P<prob_id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'unfixing_tech_problems')), array (  '_controller' => 'AppBundle\\Controller\\TechController::addIntoUnfixedAction',));
                }

                // fixing_tech_problems
                if (0 === strpos($pathinfo, '/tech/problems/fixed') && preg_match('#^/tech/problems/fixed/(?P<prob_id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fixing_tech_problems')), array (  '_controller' => 'AppBundle\\Controller\\TechController::addIntoFixedAction',));
                }

            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
